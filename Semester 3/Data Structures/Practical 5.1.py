class Node:
    def __init__(self, data):
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

def print_traversals(root):
    print("Inorder:")
    inorder(root)
    print("\nPreorder:")
    preorder(root)
    print("\nPostorder:")
    postorder(root)
    print()

root1 = Node('A')
root1.left = Node('B')
root1.right = Node('C')
root1.left.left = Node('D')
root1.left.right = Node('F')
root1.right.left = Node('G')
root1.right.right = Node('H')
root1.left.left.left = Node('I')
root1.left.left.right = Node('J')
root1.right.left.right = Node('K')

print("Tree 1")
print_traversals(root1)

root2 = Node('F')
root2.left = Node('B')
root2.right = Node('G')
root2.left.left = Node('A')
root2.left.right = Node('D')
root2.left.right.left = Node('C')
root2.left.right.right = Node('E')
root2.right.right = Node('I')
root2.right.right.left = Node('H')

print("Tree 2")
print_traversals(root2)

root3 = Node(8)
root3.left = Node(5)
root3.right = Node(4)
root3.left.left = Node(9)
root3.left.right = Node(7)
root3.left.right.left = Node(1)
root3.left.right.right = Node(11)
root3.left.right.right.left = Node(2)
root3.right.right = Node(6)
root3.right.right.left = Node(3)

print("Tree 3")
print_traversals(root3)