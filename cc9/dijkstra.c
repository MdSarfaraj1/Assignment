#include<stdio.h>
#include<limits.h>
#define V 9

void dijkstra(int g[V][V], int src);
int minimumDistance(int distance[], int set[]);
void printt(int dist[], int parent[], int src);
void printPath(int parent[], int j);

int main() {
    int src;
    int g[V][V] = { { 0, 4, 0, 0, 0, 0, 0, 8, 0 },
                    { 4, 0, 8, 0, 0, 0, 0, 11, 0 },
                    { 0, 8, 0, 7, 0, 4, 0, 0, 2 },
                    { 0, 0, 7, 0, 9, 14, 0, 0, 0 },
                    { 0, 0, 0, 9, 0, 10, 0, 0, 0 },
                    { 0, 0, 4, 14, 10, 0, 2, 0, 0 },
                    { 0, 0, 0, 0, 0, 2, 0, 1, 6 },
                    { 8, 11, 0, 0, 0, 0, 1, 0, 7 },
                    { 0, 0, 2, 0, 0, 0, 6, 7, 0 } };
    
    printf("Enter the source vertex: ");
    scanf("%d", &src);
    dijkstra(g, src);
    
    return 0;
}

void dijkstra(int g[V][V], int src) {
    int distance[V];
    int set[V];
    int parent[V]; // To store the shortest path tree

    for (int k = 0; k < V; k++) { // initializing all distances as infinity and set as null
        distance[k] = INT_MAX;
        set[k] = 0;
    }

    distance[src] = 0;
    parent[src] = -1; // Source node has no parent

    for (int k = 0; k < V - 1; k++) {
        int u = minimumDistance(distance, set); // find the minimum distance
        set[u] = 1; // add it to the set

        for (int v = 0; v < V; v++) { 
            if (!set[v] && g[u][v] && distance[u] + g[u][v] < distance[v]) {
                parent[v] = u; // Store the parent node
                distance[v] = distance[u] + g[u][v];
            }
        }
    }
    printt(distance, parent, src);
}

int minimumDistance(int distance[], int set[]) { // chose the minimum vertex
    int index, min = INT_MAX;
    for (int i = 0; i < V; i++) {
        if (distance[i] < min && !set[i]) {
            min = distance[i];
            index = i;
        }
    }
    return index;
}

void printt(int dist[], int parent[], int src) {
    printf("Vertex\t\tDistance\tPath");
    for (int i = 0; i < V; i++) {
        printf("\n%d -> %d \t\t %d\t\t%d ", src, i, dist[i], src);
        printPath(parent, i);
    }
}

void printPath(int parent[], int j) {
    if (parent[j] == -1)
        return;

    printPath(parent, parent[j]);
    printf("-> %d ", j);
}
