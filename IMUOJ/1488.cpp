#include<iostream>
#include<cmath>
#include<string>
using namespace std;
int main()
{
    double k, l, s, w;
    int ans;
    string str[3] = { "James Bond survives.","Killed by the impact.","Stuck in the air." };
    while (cin >> k >> l >> s >> w)
    {
        if (k == 0 && l == 0 && s == 0 && w == 0)break;
        if (l >= s)
        {
            if (sqrt(2 * 9.81*s) >= 10) ans = 1;
            else ans = 0;
        }
        else
        {
            if ((w*9.81*s - (s - l)*(s - l)*k / 2) >= 50 * w) ans = 1;
            else if ((w*9.81*s - (s - l)*(s - l)*k / 2) <= 0) ans = 2;
            else ans = 0;
        }
        cout << str[ans] << endl;
    }
    return 0;
}