#include <iostream>
using namespace std;
unsigned int a[105];
int index=0;
int main() {
    while (cin>>a[index]){
        if(a[index]==0) break;
        index++;
    }
    for (int i=index-1;i>=0;i--){
        cout<<a[i];
        if(i!=0) cout<<" ";
    }
    return 0;
}
