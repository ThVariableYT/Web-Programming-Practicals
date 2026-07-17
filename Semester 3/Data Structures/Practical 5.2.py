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

root = Node('F')

root.left = Node('B')
root.right = Node('G')

root.left.left = Node('A')
root.left.right = Node('D')

root.left.right.left = Node('C')
root.left.right.right = Node('E')

root.right.right = Node('I')
root.right.right.left = Node('H')

print("Inorder:")
inorder(root)

print("\nPreorder:")
preorder(root)

print("\nPostorder:")
postorder(root)
