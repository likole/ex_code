#include<iostream>
using namespace std;
int n, m, a[101], dp_max[51][10], dp_min[51][10], MIN = 999999, MAX=-999999, sum_pre_items[51];
int min(int a, int b)
{
    if (a < b)
        return a;
    return b;
}
int max(int a, int b)
{
    if (a > b)
        return a;
    return b;
}
void DP(int a[])
{
    //sum of pre items
    for (int i = 1; i <= n; i++)
    {
        sum_pre_items[i] = sum_pre_items[i - 1] + a[i];
    }
    //init dp,best
    for (int i = 0; i <= n; i++)
    {
        for (int j = 0; j <= m; j++)
        {
            dp_max[i][j] = -999999;
            dp_min[i][j] = 999999;
        }
    }
    dp_max[0][0] = dp_min[0][0] = 1;
    //
    for (int i = 1; i <= n; i++)
    {
        dp_max[i][1] = dp_min[i][1] = (sum_pre_items[i] % 10 + 10) % 10;
        for (int j = 2; j <= min(m,i); j++)
        {
            for (int k = j - 1; k < i; k++)
            {
                {
                    dp_max[i][j] = max(dp_max[i][j], dp_max[k][j - 1] * (((sum_pre_items[i] - sum_pre_items[k]) % 10 + 10) % 10));
                    dp_min[i][j] = min(dp_min[i][j], dp_min[k][j - 1] * (((sum_pre_items[i] - sum_pre_items[k]) % 10 + 10) % 10));
                }
            }
        }
    }
    MAX = max(MAX, dp_max[n][m]);
    MIN = min(MIN, dp_min[n][m]);
}
int main()
{
    cin >> n >> m;
    for (int i = 1; i <= n; i++)
    {
        cin >> a[i];
    }
    //拆环
    for (int i = 1; i <= n; i++)
    {
        a[n + i] = a[i];
    }
    //
    for (int i = 0; i < n; i++)
    {
        DP(a + i);
    }
    cout << MIN << endl << MAX;
}