#include <stdio.h>

int n;
int Visited[10] = {0}, Adj[10][10];

void BFS(int v) {
    int Q[10], F = 0, R = -1;
    Q[++R] = v;
    Visited[v] = 1;

    while (F <= R) { // until Queue not empty
        v = Q[F++];
        printf("%d ", v);
        for (int i = 0; i < n; i++)
            if (!Visited[i] && Adj[v][i]) {
                Q[++R] = i;
                Visited[i] = 1; // true
            }
    }
}

int main() {
    int i, j;
    printf("Enter the number of nodes: ");
    scanf("%d", &n);
    printf("Enter the adjacency matrix\n");
    for (i = 0; i < n; i++)
        for (j = 0; j < n; j++)
            scanf("%d", &Adj[i][j]);

    BFS(0);

    return 0;
}
