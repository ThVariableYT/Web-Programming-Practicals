class Node:
    def _init_(self, data):
        self.data = data
        self.left = None
        self.right = None

def inorder(root):
    if root:
        inorder(root.left)
        print(root.data, end=" ")
        inorder(root.right)

def preorder(root):
    if root:
        print(root.data, end=" ")
        preorder(root.left)
        preorder(root.right)

def postorder(root):
    if root:
        postorder(root.left)
        postorder(root.right)
        print(root.data, end=" ")

root = Node(8)

root.left = Node(5)
root.right = Node(4)

root.left.left = Node(9)
root.left.right = Node(7)

root.left.right.left = Node(1)
root.left.right.right = Node(11)

root.left.right.right.left = Node(2)

root.right.right = Node(6)
root.right.right.left = Node(3)

print("Inorder:")
inorder(root)

print("\nPreorder:")
preorder(root)

print("\nPostorder:")
postorder(root)