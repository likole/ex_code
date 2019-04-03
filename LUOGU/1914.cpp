#include <iostream>
#include <string>
#include <cstdlib>
#include <cstring>
using namespace std;
int n;
int main() {
    cin>>n;
    string s;
    cin>>s;
    for (char i : s) {
        cout<<(char)(((i -'a')+n)%26+'a');
    }

}
