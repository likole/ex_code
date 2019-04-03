#include<iostream>
using namespace std;
int main()
{
    int n,a[4];
    cin >> n;
    for (int t = 0; t < n; t++)
    {
        int count = 0;
        for (int i = 0; i < 4; i++)
        {
            cin >> a[i];
        }
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                for (int k = 0; k < 4; k++)
                {
                    for (int m = 0; m < 4; m++)
                    {
                        if (i != j&&i != k&&i != m&&j != k&&j != m&&k != m)
                        {
                            cout << a[i] << a[j] << a[k] << a[m];
                            if ((++count) % 6 != 0)cout << " ";
                        }
                    }
                }
            }
            cout << endl;
        }
        if(t!=n-1)cout << endl;
    }
}
