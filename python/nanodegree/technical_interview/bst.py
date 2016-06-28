class Node(object):
    def __init__(self, value):
        self.value = value
        self.left = None
        self.right = None

class BST(object):
    def __init__(self, root):
        self.root = Node(root)

    def insert(self, new_val):
        self.insert_helper(self.root, new_val)

    def insert_helper(self, current, new_val):
        if current.value < new_val:
            if current.right:
                self.insert_helper(current.right, new_val)
            else:
                current.right = Node(new_val)
        else:
            if current.left:
                self.insert_helper(current.left, new_val)
            else:
                current.left = Node(new_val)

    def print_tree(self):
        """Print out all tree nodes
        as they are visited in
        a pre-order traversal."""
        return self.inorder_print(self.root, "")[1:]

    def inorder_print(self, start, traversal):
        if start == None:
            return traversal
        traversal = self.inorder_print(start.left, traversal)
        traversal += '-' + str(start.value)
        traversal = self.inorder_print(start.right, traversal)
        return traversal