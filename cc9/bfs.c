#include<stdio.h>
int G[10][10],visited[10],q[10],n,f=0,r=-1,i,j;    //n is no of vertices and graph is stored in array   //G[10][10]
void BFS(int v)		//BFS function
{
for(i=1;i<=n;i++)
       if(!visited[i]&&G[v][i])
            q[++r]=i;
    if(f<=r)
	{   
	    visited [q[f]]=1;  
BFS(q[f++]);
 }
}
int main()				// main function
{
printf("Enter number of vertices:");
	scanf("%d",&n);
	printf("Enter adjacency matrix of the graph:\n"); //read the adjacency matrix
	for(i=1;i<=n;i++)
for(j=1;j<=n;j++)
			scanf("%d",&G[i][j]);
	for(i=1;i<=n;i++){
		q[i]=0;visited[i]=0;}
	BFS(1);		
	printf("BFS traversal of the graph is ");
for(i=1;i<=n;i++)
	{
	    if(visited[i])
	printf("-> %d",i);
	    else {
	printf("BFS traversal is not possible");
	        break; }
    }
    return 0;
}

