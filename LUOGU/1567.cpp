#include <iostream>
#include <algorithm>
#include <set>
using namespace std;
int today,yesterday,cnt,cnt_max;
int main() {
    int n;
    cin>>n;
    while (n--){
        cin>>today;
        if(today>yesterday){
            cnt++;
        }else{
            if(cnt>cnt_max)cnt_max=cnt;
            cnt=1;
        }
        yesterday=today;
    }
    cout<<cnt_max;
}
