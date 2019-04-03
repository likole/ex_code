#include<iostream>
using namespace std;
int buf[1000];
int f(int x)
{
    if (buf[x] > 0) return buf[x];
    int ans = 1;
    for (int i=1; i <= x/2; i++)
    {
        ans += f(i);
    }
    buf[x] = ans;
    return ans;
}
int main()
{
    int n;
    while (cin >> n) {
        cout << f(n) << endl;
    }
}