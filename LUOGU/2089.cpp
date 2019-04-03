#include <iostream>
#include <cstdio>
#include <cstring>
using namespace std;
int n;
int ans[60000][10],cnt,tmp[10];
void dfs(int cur){
    if(cur==10){
        int t=0;
        for (int i = 0; i < 10; ++i) {
            t+=tmp[i];
        }
        if(t==n){
            memcpy(ans[cnt],tmp,sizeof(tmp));
            cnt++;
        }
        return;
    }
    for (int i = 1; i <=3 ; ++i) {
        tmp[cur]=i;
        dfs(cur+1);
    }
}
int main(){
    scanf("%d",&n);
    if(n<10||n>30){
        printf("0");
        return 0;
    }
    dfs(0);
    printf("%d\n",cnt);
    for (int i = 0; i < cnt; ++i) {
        for (int j = 0; j < 9; ++j) {
            printf("%d ",ans[i][j]);
        }
        printf("%d\n",ans[i][9]);
    }
}
