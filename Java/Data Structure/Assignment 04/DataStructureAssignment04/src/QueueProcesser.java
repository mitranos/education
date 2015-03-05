/**
 *
 * File:         QueueProcesser.java
 * Purpose:      Class that handle the process of queuing and dequeuing the cue and organize through priorities.
 * Project:      CSIS 3400 Assignment 04
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.ArrayList;
import java.util.Collections;
import jsjf.LinkedQueue;


public class QueueProcesser {
	private ArrayList<Job> list = new ArrayList<Job>();
	private ArrayList<Job> tempList = new ArrayList<Job>();
	private Data data = new Data();
	private LinkedQueue<Job> queue = new LinkedQueue<Job>();
	private Job currentJob = null;
	private int jobsCompleted = 0;
	private int idleTime = 0;
	private int totalJobs = 0;
	private int timeOfDay = 0;
	private int lastJobCompletionTime = 0;

	/**
	 * Method to process the queue
	 */
	public void processQueue(){

		int i = 0;
		list = data.readFile(list);
		totalJobs = list.size();
		timeOfDay = list.get(0).getTimeOfArrival();
		lastJobCompletionTime =  list.get(0).getTimeOfArrival();

		System.out.printf("%-8s  %-15s   %-15s   %-15s   %-15s%n", "Job n.", "Arrival Time", "Completion Time", "Processing Time", "Wait Time");

		while(totalJobs != jobsCompleted){
			if (list.get(i).getTimeOfArrival() == timeOfDay){
				queue.enqueue(list.get(i));
				if (!queue.isEmpty()) {
					tempList.clear();
					while(!queue.isEmpty()){
						tempList.add(queue.dequeue());
					}
					tempList = organizeList(tempList);
					int x = 0;
					while(tempList.size() != x){
						queue.enqueue(tempList.get(x));
						x++;
					}
				}
				if  (i < (totalJobs - 1))
					i++;
			}

			if (currentJob != null){
				if (timeOfDay == currentJob.getCompletionTime()){
					printOutput(currentJob, lastJobCompletionTime);
					lastJobCompletionTime = currentJob.getCompletionTime();
					jobsCompleted++;
					currentJob = null;
				}
			} 

			if(currentJob == null && !(queue.isEmpty())) {
				currentJob = queue.dequeue();
				currentJob.setCompletionTime(timeOfDay);
			}

			if (currentJob == null && queue.isEmpty() && totalJobs != jobsCompleted){
				idleTime++;
			}
			timeOfDay++;
		}
		System.out.println("\nThe total Idle Time was " + idleTime + " minutes.");
	}

	/**
	 * Method to convert minutes format(720) into normal time format (12:00)
	 * @param time int
	 * @return String
	 */
	private String timeToDate(int time){
		int hor = time / 60;
		int min = time % 60;
		String hours = String.format("%02d", hor);
		String minutes = String.format("%02d", min);
		String date = hours + ":" + minutes;
		return date;
	}

	/**
	 * Method to sort the ArrayList trough Priority
	 * @param jobList ArrayList<Job>
	 * @return ArrayList<Job>
	 */
	private ArrayList<Job> organizeList(ArrayList<Job> jobList){
		Collections.sort(jobList, new MyComparator());
		return jobList;
	}

	/**
	 * Method to Print out to the screen the completed Job
	 * @param currentJob
	 * @param lastJobComplatationTime 
	 */
	private void printOutput(Job currentJob , int lastJobCompletionTime){
		System.out.printf("%-8s  %-15s   %-15s   %-15s   %-15s%n", currentJob.getJobNumber()
				, timeToDate(currentJob.getTimeOfArrival()) 
				, timeToDate(currentJob.getCompletionTime()) 
				, currentJob.getProcessingTime() 
				, timeToDate(waitTime(currentJob , lastJobCompletionTime)));
	}
	/**
	 * Method to get the waiting time of the job 
	 * @param currentJob
	 * @param lastJobComplatationTime
	 * @return int
	 */
	private int waitTime(Job currentJob , int lastJobCompletionTime){
		return lastJobCompletionTime - currentJob.getTimeOfArrival() > 0 ? lastJobCompletionTime - currentJob.getTimeOfArrival() : 0;
	}

}
