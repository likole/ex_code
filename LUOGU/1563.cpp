#include <iostream>
#include <string>
#include <cstdio>
using namespace std;
int n,m,a,s;
int direction[100000+5];
char name[100000+5][11];
int main(){
    scanf("%d %d",&n,&m);
    for (int i = 0; i < n; ++i) {
        scanf("%d %s",&direction[i],name[i]);
    }
    int now=0;
    for (int i = 0; i < m; ++i) {
        scanf("%d %d",&a,&s);
        //shun shi zhen
        if((a==0&&direction[now]==0)||(a==1&&direction[now]==1)){
            now=(now+n-s)%n;
        }else{
            now=(now+s)%n;
        }
    }
    printf("%s",name[now]);
}
