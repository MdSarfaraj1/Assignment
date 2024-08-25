#include <stdio.h>
#include <limits.h>

#define V 4 // Number of vertices in the graph
#define INF INT_MAX // Representing infinity

void printSolution(int dist[V][V], int next[V][V]) {
    for (int i = 0; i < V; i++) {
        for (int j = 0; j < V; j++) {
            if (i != j) {
                printf("Shortest path from vertex %d to vertex %d: ", i, j);
                if (dist[i][j] == INF) {
                    printf("No path\n");
                } else {
                    printf("%d ", i);
                    int k = i;
                    while (k != j) {
                        k = next[k][j];
                        printf("-> %d ", k);
                    }
                    printf(" | Cost: %d\n", dist[i][j]);
                }
            }
        }
    }
}

void floydWarshall(int graph[V][V]) {
    int dist[V][V], next[V][V];

    // Initialize the distance and next matrices
    for (int i = 0; i < V; i++) {
        for (int j = 0; j < V; j++) {
            if (graph[i][j] != INF && i != j) {
                dist[i][j] = graph[i][j];
                next[i][j] = j;
            } else {
                dist[i][j] = INF;
                next[i][j] = -1;
            }
        }
    }

    // Floyd-Warshall algorithm
    for (int k = 0; k < V; k++) {
        for (int i = 0; i < V; i++) {
            for (int j = 0; j < V; j++) {
                if (dist[i][k] != INF && dist[k][j] != INF && dist[i][k] + dist[k][j] < dist[i][j]) {
                    dist[i][j] = dist[i][k] + dist[k][j];
                    next[i][j] = next[i][k];
                }
            }
        }
    }

    printSolution(dist, next);
}

int main() {
    int graph[V][V] = {
        {0, 3, INF, 7},
        {8, 0, 2, INF},
        {5, INF, 0, 1},
        {2, INF, INF, 0}
    };

    floydWarshall(graph);

    return 0;
}
