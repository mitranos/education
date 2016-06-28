# coding=utf-8
from linkedlist import Node, LinkedList
from bst import BST


def main():
    question1Test()
    question2Test()
    question3Test()
    question4Test()
    question5Test()


'''
Question 1:

Given two strings s and t, determine whether some anagram of t is a substring of s. For
example: if s = “udacity” and t = “ad”, then the function returns True. Your function
definition should look like: “question1(s, t)”, and return a boolean True or False.

'''


def question1Test():
    tuples = [("Udacity", "ad", True),  # Example Given => True
              ("Udacity", "yticadu", True),  # Entire Anagram => True
              ("hello", "world", False),  # Not Anagram => False
              ("UDACITY", "udacity", True),  # Lower Case to Upper Case => True
              ("Udacity", "Udacity1", False),  # More Letters => False
              ("Udacity", "a", True),  # Single Letter => True
              ("Udacity", "", False),  # Empty String => False
              ("udddddddda", "uda", False)]  # Repetitions => False
    for a, b, c in tuples:
        assert question1(a, b) == c


'''
Question 1 Explanation:

The following algorithm counts the number of occurrences of each character and
if the characters in the first string are == of the second string we found an
anagram match, otherwise we did not find a match. Moreover, ther is a check variable
that check if there are discrepancies between characters.

The first two loops used to count the characters both needs n steps to complete .
The third iteration, checking for adjacency, always takes n - m steps.
Adding it all up gives T(n)=2n+n-m.

Therefore, the time complexity is O(n).

This implementation of the algorithm  is using additional storage to keep the
two lists of character counts. In other words, this algorithm is sacrificing space
in order to gain time.

As a matter of fact, the space complexity is O(n),

This algorithm make the assumption that there are no special characters in a string.
However, can be further improved considering the special characters.
'''


def question1(s, t):
    # Setting up the dictionary and transforming the strings to lowercase
    dic = dict.fromkeys(t, 0)
    s = s.lower()
    t = t.lower()

    # Checking for boundary cases: when string is empty
    # and second string is bigger that the first string
    if len(s) < len(t) or len(s) == 0 or len(t) == 0:
        return False

    # Counting second string char occurrences
    for c in t:
        dic[c] += 1

    # Counting and decreasing first string char occurrences.
    for i in range(len(t)):
        c = s[i]
        if c in dic:
            dic[c] -= 1
    # setting up the check variable equal to the sum of the remaining chars.
    check = sum(abs(dic[c]) for c in dic)

    # Check characters adjacency and slide over
    for i in range(len(t), len(s)):
        if check == 0:
            return True
        else:
            # Process letter from i steps ago from s
            c = s[i - len(t)]
            if c in dic:
                dic[c] += 1
                # char are not adjacent
                if dic[c] > 0:
                    check += 1
                else:
                    check -= 1
            # Processing new letter
            c = s[i]
            if c in dic:
                dic[c] -= 1
                # char are not adjacent
                if dic[c] < 0:
                    check += 1
                else:
                    check -= 1
    return check == 0


'''
Question 2:

Given a string a, find the longest palindromic substring contained in a. Your function
definition should look like "question2(a)", and return a string.
'''


def question2Test():
    palindromes = [
        ("abababa", "abababa"),         # Odd palindrome => abababa
        ("abaaba", "abaaba"),           # Even palindrome => abaaba
        ("ccabababadd", "abababa"),     # Odd big palindrome => abababa
        ("ccabaabadd", "abaaba"),       # Even big palindrome => abaaba
        ("ccabAbabadd", "abababa"),     # Odd big palindrome Upper Case => abababa
        ("a", "a"),                     # Single Letter Palindrome => a
        ("no", "n"),                    # Two Letter => n
        ("tac o cat", "tac o cat"),     # Space Palindrome => tac o cat
        ("atac o cathere", "tac o cat"),# Space big Palindrome => tac o cat
        ("", None)                      # Empty String => None
    ]
    for palindrome, result in palindromes:
        assert question2(palindrome) == result


'''
Question 2 Explanation:

The following is an implementation of the Manacher's algorithm. The algorithm
uses the symmetry of the previously seen data to find the maximum palindrome substring
in linear time. Thus, the time complexity of the following algorithm is O(n).

You can suppose that the algorithm is O(n^2) because you can see two loops.
However, each iteration of the loop don't always ends going up to n, because the
algorithm take counts of the palindrome substring seen before and shift the symmetry.

As a matter of fact, the space complexity of the algorithm is O(n), where n is the length of
the string. Indeed, the algorithm stores an array of integers to count the length of the
palindrome count.

Sources:
http://www.geeksforgeeks.org/manachers-algorithm-linear-time-longest-palindromic-substring-part-1/
'''


def question2(a):
    # Add pipes to compare even palindrome
    string = "|" + "|".join(a.lower()) + "|"

    # Initialization of border, center and array of palindrome lengths
    border = 0
    center = 0
    lengths = [1] * len(string)
    result = [0, 0]

    # Loop through each character of the String
    for i in range(0, len(string)):
        # if the border is greater than the char index
        if border > i:
            # Picks the min between center to i OR i to border
            lengths[i] = min(lengths[2 * center - i], border - i)
        # Compare left char and right char from the index,
        # while there is a palindrome continue adding i to the lengths
        while i - lengths[i] >= 0 and i + lengths[i] < len(string) and string[i - lengths[i]] == string[i + lengths[i]]:
            lengths[i] += 1

        # update borders, center, and result
        if border < lengths[i] + i:
            border = lengths[i] + i
            center = i
            if border - center > result[1] - result[0]:
                result = [center, border]

    # Finally join the palindrome string using border and center, and eliminate the pipes
    final = "".join([x for x in string[2 * result[0] - result[1] + 1:result[1]] if x != '|'])
    if not final:
        return None
    return final


'''
Question 3:

Given an undirected graph G, find the minimum spanning tree within G. A minimum spanning
tree connects all vertices in a graph with the smallest possible total weight of edges.
Your function should take in and return an adjacency list structured like this:
{'A':[('B',2)],'B':[('A',2),('C',5)],'C':[('B',5)]}. Vertices are represented as unique
strings. The function definition should be "question3(G)
'''


def question3Test():
    print question3({'A': [('B', 2)], 'B': [('A', 2), ('C', 5)], 'C': [('B', 5)]})
    # => {'C': [('B', 5)], 'B': [('A', 2)]}
    print question3({'A': [('C', 2)], 'B': [('D', 8), ('C', 5)], 'C': [('A', 2), ('B', 5)], 'D': [('B', 8)]})
    # => {'C': [('A', 2)], 'B': [('C', 5)], 'D': [('B', 8)]}
    print question3({'A': [('C', 10), ('B', 2)],
                     'B': [('D', 2), ('C', 5), ('A', 2)],
                     'C': [('A', 10), ('B', 5), ('D', 1)],
                     'D': [('B', 2), ('C', 1)]})
    # => {'C': [('D', 1)], 'B': [('A', 2)], 'D': [('B', 2)]}


'''
Question 3 Explanation:

The following algorithm is an implementation of Prim Algorithm to find the minimum spanning tree.
It utilize a priority queue to check that min value to reach a vertices.

The time complexity of this algorithm is O(V^2) where V is the number of vertices. Indeed, to
implement the algorithm I used priority queue. The time complexity of Prim’s algorithm can
be reduced to O(E log V) if binary heap are used.

The time complexity of this algorithm depends manly on the data structure used.

The space complexity of the algorithm using priority queue is O(2V), where V is the number of vertices.
Indeed, the algorithm stores two different dictionary of vertex and minimum weights to reach that vertex.
'''


# function to get the minimum key of the priority queue
def getmin(queue):
    lowest = 1000
    keylowest = None
    for key in queue:
        if queue[key] <= lowest:
            lowest = queue[key]
            keylowest = key
    del queue[keylowest]
    return keylowest


def question3(G):
    root = G.keys()[0]
    result = {}  # The result: { vertex: predecesor in Minimum Spanning Tree}; -1 if root
    key = {}  # Minimum weight for each vertex
    queue = {}  # Priority queue implemented as dictionary

    # Set the initial distances for each verteces to a relative large number
    for v in G:
        result[v] = -1
        key[v] = 1000
    key[root] = 0
    # Add verteces to the priority queue
    for v in G:
        queue[v] = key[v]

    while queue:
        u = getmin(queue)
        # Get all neighbors of the vertex in the priority queue
        for v in G[u]:
            # if it is in the queue and the value of the distance is
            # lower then the value on the key
            if v[0] in queue and v[1] < key[v[0]]:
                # append branch of the tree to the result
                result[v[0]] = [ ( u , v[1] )]
                # Modify minimum weights and priority queue
                key[v[0]] = v[1]
                queue[v[0]] = v[1]
    return dict((k, v) for k, v in result.iteritems() if v != -1)


'''
Question 4:

Find the least common ancestor between two nodes on a binary search tree. The least common
ancestor is the farthest node from the root that is an ancestor of both nodes. For example,
the root is a common ancestor of all nodes on the tree, but if both nodes are descendents of
the root's left child, then that left child might be the lowest common ancestor. You can assume
that both nodes are in the tree, and the tree itself adheres to all BST properties. The function
definition should look like "question4(T, r, n1, n2)", where T is the tree represented as a
matrix, where the index of the list is equal to the integer stored in that node and a 1 represents
a child node, r is a non-negative integer representing the root, and n1 and n2 are non-negative
integers representing the two nodes in no particular order. For example, one test case might be
question4([[0,1,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[1,0,0,0,1],[0,0,0,0,0]],3,1,4), and the answer would be 3.
'''


def question4Test():
    assert question4([[0,1,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[1,0,0,0,1],[0,0,0,0,0]],3,1,4) == 3  # => 3
    assert question4([[0,0,0,0,0],[1,0,0,0,0],[0,1,0,1,0],[0,0,0,0,1],[0,0,0,0,0]],2,0,4) == 2  # => 2
    assert question4([[0,0,0,0,0],[1,0,0,0,0],[0,1,0,1,0],[0,0,0,0,1],[0,0,0,0,0]],2,0,1) == 1 # => 1
    assert question4([[0,0,0,0,0],[1,0,0,0,0],[0,1,0,1,0],[0,0,0,0,1],[0,0,0,0,0]],2,1,3) == 2 # => 2
    assert question4([[0,0,0,0,0],[1,0,0,1,0],[0,0,0,0,0],[0,0,1,0,1],[0,0,0,0,0]],1,2,4) == 3 # => 3
    assert question4([[0,0,0,0,0],[1,0,0,1,0],[0,0,0,0,0],[0,0,1,0,1],[0,0,0,0,0]],1,0,2) == 1 # => 1
    assert question4([[0,0,0,0,0],[1,0,0,1,0],[0,0,0,0,0],[0,0,1,0,1],[0,0,0,0,0]],1,0,3) == 1 # => 1


'''
Question 4 Explanation:

The following algorithm first create a tree from the matrix given and then traverses the
tree recursively from the root until it finds the two children. The main idea behind this
implementation is that while traversing the tree the first node we encounter that is between
n1 and n2 must be the least common ancestor between the 2 nodes.

The time complexity of this algorithm is O(n), where n is the number of nodes of the tree. Indeed,
first the computation that takes the most time is creating the tree which is n. Finding the least
common ancestor takes O(h), where h is the height of the tree. Therefore T(n) = n + h, where n will
be always bigger than h. Thus the time complexity is O(n).

The space complexity of this algorithm is O(n), where n is the number of nodes of the tree. As a matter
of fact, the algorithm creates the tree ans stores it in a Graph data structure.

There should be a better version of this algorithm that instead of building the tree first, it will
directly traverse the matrix and find the least common ancestor. That implementation take O(h),
where h is the height of the tree. However, I don not have more time to spend on this assignment.
'''


# Creating an helper to transform the matrix to a tree object
def treeHelper(T, r, tree):
    # loop through the index of the node and find children
    for x in range(0, len(T[r])):
        # if a child is found
        if T[r][x] == 1:
            # Insert into the tree
            tree.insert(x)
            # travers the child node for other children
            tree = treeHelper(T, x, tree)
    return tree


# recursively traverse the tree to find the least common ancestor
def leastCommonAncestor(root, n1, n2):
    # Base Case, last child
    if root is None:
        return None
    # if both n1 and n2 are smaller than the node
    # the least common ancestor is on the left
    if root.value > n1 and root.value > n2:
        return leastCommonAncestor(root.left, n1, n2)

    # if both n1 and n2 are greater than the node
    # the least common ancestor is on the right
    if root.value < n1 and root.value < n2:
        return leastCommonAncestor(root.right, n1, n2)

    return root


def question4(T, r, n1, n2):
    # constructing the Tree
    tree = BST(r)
    # Uncomment to print the in-order tree
    # print tree.print_tree()
    tree = treeHelper(T, r, tree)
    # get the least Common Ancestor Node
    node = leastCommonAncestor(tree.root, n1, n2)
    return node.value


'''
Question 5:

Find the element in a singly linked list that's m elements from the end. For example, if a linked list
has 5 elements, the 3rd element from the end is the 3rd element. The function definition should look
like "question5(ll, m)", where ll is the first node of a linked list and m is the "mth number from the end".
You should copy/paste the Node class below to use as a representation of a node in the linked list.
Return the value of the node at that position.
'''


def question5Test():
    ll = LinkedList()
    ll.append(Node(1))
    ll.append(Node(10))
    ll.append(Node(2))
    ll.append(Node(69))
    ll.append(Node(10))
    ll.append(Node(33))
    assert question5(ll, 2) == 10  # => 10
    assert question5(ll, 4) == 2 # => 2
    assert question5(ll, 0) is None  # => None
    assert question5(ll, 7) is None  # => None
    assert question5(ll, 3) == 69  # => 69


'''
Question 5 Explanation:

The following algorithm first counts the number of nodes in the linkedlist and
then with the length loop through the linkedlist length - m steps to find the mth
element from the end.

There are two loops in this algorithm: the first one always count up to n, where n is
the linkedlist length; the second loop counts up to the n-m element, which worst case
scenario would be n anyway. Thus the time complexity is defined as T(n)=2n.

Therefore, the time complexity is O(n).

Regarding the space complexity of this algorithm, it stores 3 values, which are length,
temp, and node. Therefore, the space complexity is O(3).

Another implementation that could have taken O(1) was adding a position parameter in
the linkedlist implementation of a Node, sacrificing space in order to gain time each
time you added an element in the linkedlist. However, I don't think I was supposed to
change the linkedlist implementation.
'''


def question5(ll, m):
    # initializing length and heads of the ll
    length = 0
    temp = ll.head
    node = ll.head

    # checking that m is no smaller than 1
    if m <= 0:
        return None

    # Looping through the ll to get its length
    while temp:
        temp = temp.next
        length += 1

    # Checking that m is not bigger than the ll length
    if m > length:
        return None

    # Finding the nth element from the end
    for i in range(1, length - m + 1):
        node = node.next

    return node.value


if __name__ == "__main__":
    main()