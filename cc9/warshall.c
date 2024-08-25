#include<stdio.h>
#define min(a,b) ((a)<(b)?(a):(b))
int main()
{
int g[6][6]={
    {0,2,2,999,999,999},
    {999,0,999,2,3,999},
    {999,1,0,999,3,4},
    {999,999,999,0,999,2},
    {999,999,999,999,0,1},
    {999,999,999,999,999,0}
};
int i,j,k;

for(j=0;j<6;j++)
{
	for(i=0;i<6;i++){
		printf("%d   ",g[j][i]);
        }
}
// warshall
for(k=0;k<6;k++)
{
    for(i=0;i<6;i++)
    {
        for(j=0;j<6;j++)
        {
           if( g[i][j]>( g[i][k] + g[k][j]))
           {
            g[i][j] = g[i][k] + g[k][j];
              
           }
        }
    }
}
printf(" \n\n\nthe result is :");
for(j=0;j<6;j++)
{
	for(i=0;i<6;i++){
		printf("%d   ",g[j][i]);
        }
        printf("\n");
}

}