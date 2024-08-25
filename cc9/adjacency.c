#include <stdio.h>

#define V 4 // Number of vertices
#define E 5 // Number of edges

void printAdjacencyMatrix(int adj[V][V]);
void printIncidenceMatrix(int inc[V][E]);

int main() {
    // Initialize the adjacency matrix with zeros
    int adj[V][V] = {0};

    // Define the edges in the graph
    int edges[E][2] = {
        {0, 1}, // Edge 1: A-B
        {1, 2}, // Edge 2: B-C
        {2, 3}, // Edge 3: C-D
        {3, 0}, // Edge 4: D-A
        {0, 2}  // Edge 5: A-C
    };

    // Populate the adjacency matrix
    for (int i = 0; i < E; i++) {
        int u = edges[i][0];
        int v = edges[i][1];
        adj[u][v] = 1;
        adj[v][u] = 1; // Since the graph is undirected
    }

    // Initialize the incidence matrix with zeros
    int inc[V][E] = {0};

    // Populate the incidence matrix
    for (int i = 0; i < E; i++) {
        int u = edges[i][0];
        int v = edges[i][1];
        inc[u][i] = 1;
        inc[v][i] = 1;
    }

    // Print the adjacency matrix
    printf("Adjacency Matrix:\n");
    printAdjacencyMatrix(adj);

    // Print the incidence matrix
    printf("\nIncidence Matrix:\n");
    printIncidenceMatrix(inc);

    return 0;
}

void printAdjacencyMatrix(int adj[V][V]) {
    printf("  ");
    for (int i = 0; i < V; i++) {
        printf(" %c", 'A' + i);
    }
    printf("\n");

    for (int i = 0; i < V; i++) {
        printf("%c ", 'A' + i);
        for (int j = 0; j < V; j++) {
            printf(" %d", adj[i][j]);
        }
        printf("\n");
    }
}

void printIncidenceMatrix(int inc[V][E]) {
    printf("    ");
    for (int i = 0; i < E; i++) {
        printf("E%d ", i + 1);
    }
    printf("\n");

    for (int i = 0; i < V; i++) {
        printf("%c  ", 'A' + i);
        for (int j = 0; j < E; j++) {
            printf("%d  ", inc[i][j]);
        }
        printf("\n");
    }
}
