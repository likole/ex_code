#include <iostream>
#include <cstdio>
#include <algorithm>
using namespace std;
int apple[5000+5],index,cnt;
int main(){
    int n,s,a,b,x,y;
    scanf("%d %d",&n,&s);
    scanf("%d %d",&a,&b);
    a+=b;
    for (int i = 0; i < n; ++i) {
        scanf("%d %d",&x,&y);
        if(x<=a)apple[index++]=y;
    }
    sort(apple,apple+index);
    for (int i = 0; i < index; ++i) {
        if(s>=apple[i]){
            s-=apple[i];
            cnt++;
        }else{
            break;
        }
    }
    printf("%d",cnt);

}
