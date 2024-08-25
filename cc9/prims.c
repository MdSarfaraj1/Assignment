#include<stdio.h>
#include<limits.h>
#define V 5
int main()
{
    void primMST(int g[][V]);
    int graph[V][V] = { { 0, 2, 0, 6, 0 },
                        { 2, 0, 3, 8, 5 },
                        { 0, 3, 0, 0, 7 },
                        { 6, 8, 0, 0, 9 },
                        { 0, 5, 7, 9, 0 } };

    // Print the solution
    primMST(graph);

    return 0;
}
void primMST(int g[V][V])
{
    int minimum(int key[], int set[]);
    void print(int parent[],int g[][V]);
    int set[V],key[V],src,parent[V];
    for(int i=0;i<V;i++)
    {
        key[i]=INT_MAX;
        set[i]=0;

    }
    key[0]=0;
    parent[0]=-1;
    int count=0;
    while(count<V-1)
    {
        int u=minimum(key,set);
        set[u]=1;
        for (int v = 0; v < V; v++)
        {
            if(g[u][v] && !set[v] && g[u][v]<key[v])
            {
                key[v]=g[u][v];
                parent[v]=u;
            }
        }
        count++;
    }
    print(parent,g);
    
}
int minimum(int key[], int set[])
{
    int min=INT_MAX,index;
    for(int v=0;v<V;v++)
    {
        if(set[v]==0 && key[v]<min)
        {
        min=key[v];
        index=v;
        }
    }
    return index;
}
void print(int parent[],int g[][V])
{
    printf("\nEdge \t\t\tWeihgts\n");
    for(int i=0;i<V;i++)
    {
        printf("%d--%d\t%d\n",parent[i],i,g[i][parent[i]]);
    }
}