#include <iostream>
#include <algorithm>
#include <set>
using namespace std;
int a[105];
set<int> answer;
int main() {
    int n;
    cin>>n;
    for (int i = 0; i < n; ++i) {
        cin>>a[i];
    }
    int cnt=0;
    sort(a,a+n);
    for (int i = 0; i < n; ++i) {
        for (int j = i+1; j < n; ++j) {
            int t=a[i]+a[j];
            for (int k = 0; k < n; ++k) {
                if(t==a[k]) answer.insert(t);
            }
        }
    }
    cout<<answer.size();

}
