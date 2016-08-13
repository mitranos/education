import random
from environment import Agent, Environment
from planner import RoutePlanner
from simulator import Simulator


class LearningAgent(Agent):
    """An agent that learns to drive in the smartcab world."""

    def __init__(self, env):
        super(LearningAgent, self).__init__(
            env)  # sets self.env = env, state = None, next_waypoint = None, and a default color
        self.color = 'taxi'  # override color
        self.planner = RoutePlanner(self.env, self)  # simple route planner to get next_waypoint
        # Initialize any additional variables here
        self.actions = [None, 'forward', 'left', 'right']  # all possible action by the enviroment
        self.waypoints = ['forward', 'left', 'right']  # all possible waypoints by the enviroment
        self.trial = 0  # Set up trail variable for decay learning rate
        self.discount_factor = 0.3  # Discount factor for the Q-Learning algorithm
        self.alpha = 0.9  # Decaying learning rate
        self.tuning = 100  # Dunning parameter to adjust learning rate
        self.randomness = True  # bolean variable to turn on and off the random action
        self.epsilon = 1  # set probability to act randomly 60% of the time for training
        self.stats = {} # Initialize states table
        self.netReward = 0 # Set net Reward
        self.moves = 0 # Set moves
        self.penalties = 0 # Set Penalties
        self.reachedDeadline = 0 # Set Reached Destination
        self.number = 1 # Set number for dictionary
        self.Qtable = {}
        for i in ['green', 'red']:  # all possible traffic lights
            for j in self.actions:  # all possible oncoming traffic
                for k in self.actions:  # all possible left traffic
                    for l in self.waypoints:  # all possible next_waypoints
                        self.Qtable[(i, j, k, l)] = [1] * len(self.actions)

    def reset(self, destination=None):
        self.planner.route_to(destination)
        self.stats[self.number] = {'net_reward': self.netReward,
                                   'penalties': self.penalties,
                                   '#_moves': self.moves,
                                   'reached_deadline': self.reachedDeadline}
        self.netReward = 0  # Reset net Reward
        self.moves = 0  # Reset moves
        self.penalties = 0  # Reset Penalties
        self.reachedDeadline = 0  # Reset Reached Destination
        # Increase Number stats table
        self.number += 1

    def update(self, t):
        # Gather inputs
        self.next_waypoint = self.planner.next_waypoint()  # from route planner, also displayed by simulator
        inputs = self.env.sense(self)
        deadline = self.env.get_deadline(self)

        # Update alpha learning rate
        self.alpha = 1 / (1.1 + self.trial / self.tuning)

        # Update state
        self.state = (inputs['light'], inputs['oncoming'], inputs['left'], self.next_waypoint)

        # Select action according to your policy
        # action = random.choice(self.actions)
        max_reward = self.Qtable[self.state].index(max(self.Qtable[self.state]))

        probability = random.randrange(0, 10)
        if self.randomness < probability and self.randomness:
            action = random.choice(self.actions)
        else:
            action = self.actions[max_reward]

        # Execute action and get reward
        reward = self.env.act(self, action)

        # Add value to net Reward
        self.netReward += reward

        # Count Moves
        self.moves += 1

        # Count Penalties
        if reward < 0:
            self.penalties += 1

        # Check if reached destination
        if reward >= 10:
            self.reachedDeadline =  1

        # Get S' state and A' actions
        next_inputs = self.env.sense(self)
        next_waypoint_prime = self.planner.next_waypoint()
        next_state = (next_inputs['light'], next_inputs['oncoming'], next_inputs['left'], next_waypoint_prime)

        # Update the Q table
        self.Qtable[self.state][self.actions.index(action)] = (1 - self.alpha) * self.Qtable[self.state][
            self.actions.index(action)] + (self.alpha * (reward + self.discount_factor * max(self.Qtable[next_state])))

        # Increase number of trials for decaying learning rate
        self.trial += 1

        # print "LearningAgent.update(): deadline = {}, inputs = {}, action = {}, reward = {}".format(deadline, inputs,action,reward)  # [debug]


def printQtableAndStats(agent):
    template = "{0:42} | {1:38}|"  # Column widths: 42, 38
    tot_net_reward = 0
    tot_penalties = 0
    tot_moves = 0
    completion = 0

    print template.format("STATE", "[None, 'forward', 'left', 'right']")  # Header
    for state in agent.Qtable:
        print template.format(state, ["%0.2f" % i for i in agent.Qtable[state]])
    for i in agent.stats:
        print i, agent.stats[i]
        tot_moves += agent.stats[i]['#_moves']
        tot_penalties += agent.stats[i]['penalties']
        tot_net_reward += agent.stats[i]['net_reward']
        completion += agent.stats[i]['reached_deadline']

    print "The average # of moves is: " + str(tot_moves/float(len(agent.stats)))
    print "The average # of penalties is: " + str(tot_penalties / float(len(agent.stats)))
    print "The average net reward is: " + str(tot_net_reward / float(len(agent.stats)))
    print "The completion rate is " + str(completion / float(len(agent.stats)) * 100) + "%"

def run():
    """Run the agent for a finite number of trials."""

    # Set up environment and agent
    # Train the algorithm with 50 dummy agents (increasing the chances of traffic and edge cases)
    e = Environment(num_dummies=3)  # create environment (also adds some dummy traffic)]
    a = e.create_agent(LearningAgent)  # create agent
    e.set_primary_agent(a, enforce_deadline=True)  # specify agent to track
    # NOTE: You can set enforce_deadline=False while debugging to allow longer trials

    # Now training it
    sim = Simulator(e, update_delay=0.00000000001, display=False, live_plot=False)
    sim.run(n_trials=90)
    # NOTE: To quit midway, press Esc or close pygame window, or hit Ctrl+C on the command-line

    a.randomness = False
    # Now simulate it
    sim = Simulator(e, update_delay=0.5, display=True)  # create simulator (uses pygame when display=True, if available)
    sim.run(n_trials=10)

    # Print Q Table value [debug]
    printQtableAndStats(a)

if __name__ == '__main__':
    run()
