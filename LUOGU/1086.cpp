#include <iostream>
#include <algorithm>
#include <cmath>
using namespace std;
struct peanut {
    int x,y,num;
    bool operator<(peanut& p){
        return num>p.num;
    }
} peanuts[405];
int idx;
int m,n,k,nx,ny,ans;
int main(){
    cin>>m>>n>>k;
    int num;
    for (int i = 1; i <= m; ++i) {
        for (int j = 1; j <= n; ++j) {
            cin>>num;
            if(num>0){
                peanuts[idx].x=i;
                peanuts[idx].y=j;
                peanuts[idx].num=num;
                idx++;
            }
        }
    }
    sort(peanuts,peanuts+idx);
    ny=peanuts[0].y;
    for (int i = 0; i < idx; ++i) {
        int t=abs(nx-peanuts[i].x)+abs(ny-peanuts[i].y)+1;
        if(t+peanuts[i].x<=k){
            ans+=peanuts[i].num;
            k-=t;
            nx=peanuts[i].x;
            ny=peanuts[i].y;
        }else{
            break;
        }
    }
    cout<<ans;
}
