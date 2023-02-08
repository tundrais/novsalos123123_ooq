import math

# a = [
#     [0, 0, 1, 0, 0],
#     [0, 0, 0, 0, 0],
#     [0, 0, 0, 0, 0],
#     [0, 0, 0, 0, 0],
#     [0, 0, 0, 0, 0]
# ]
# n = 5
#
# count = 0


n, m = map(int, input().split())
mas = []
for _ in range(n):
    mas.append(list(map(str, input().split())))

cols = 'CMY'
colored = False
