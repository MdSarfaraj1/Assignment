#include<stdio.h>
#include<limits.h>
#define V 9
int main()
{
    void dijkstra(int g[V][V],int src);
    int src;
    int g[V][V]={ { 0, 4, 0, 0, 0, 0, 0, 8, 0 },
                { 4, 0, 8, 0, 0, 0, 0, 11, 0 },
                { 0, 8, 0, 7, 0, 4, 0, 0, 2 },
                { 0, 0, 7, 0, 9, 14, 0, 0, 0 },
                { 0, 0, 0, 9, 0, 10, 0, 0, 0 },
                { 0, 0, 4, 14, 10, 0, 2, 0, 0 },
                { 0, 0, 0, 0, 0, 2, 0, 1, 6 },
                { 8, 11, 0, 0, 0, 0, 1, 0, 7 },
                { 0, 0, 2, 0, 0, 0, 6, 7, 0 } };
printf(" Enter the source vertex");
scanf("%d",&src);
dijkstra(g,src);
return 0;
}

void dijkstra(int g[V][V],int src)
{

    int minimumDistance(int distance[],int set[]);
    void printt(int dist[]);
    int distance[V];
  int set[V];
  for(int k=0;k<V;k++)  // initializing all distances as infinity and set as null
  {
    distance[k]=INT_MAX;
    set[k]=0;
  }

  distance[src]=0;
 for(int k=0;k<V;k++)
 {
    int u=minimumDistance(distance,set);   // find the minimum dstance
    set[u]=1;                              // add it to the set
    for(int v=0;v<V;v++)  // update the distance if v is not in set and there is a set to g[u][v] and 
                        //and total weight of path from src to  v through u issmaller than current value of dist[v]
    {
         if (!set[v] && g[u][v]  && distance[u] + g[u][v] < distance[v])
                distance[v] = distance[u] + g[u][v];
    }
 }
 printt(distance);

}
int minimumDistance(int distance[],int set[])   // chose the minimum vertex
{
    int index,min=INT_MAX;
    for(int i=0;i<V;i++)
    {
        if(distance[i]<min && !set[i])
        {
            min=distance[i];
            index=i;
        }
    }
    return index;
}
void printt(int dist[])
{
    printf("Vertex \t\t Distance from Source\n");
    for (int i = 0; i < V; i++)
        printf("%d                       %d\n", i, dist[i]);
}