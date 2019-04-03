#include<iostream>
using namespace std;
int main()
{
    int n;
    cin >> n;
    for (int i = 0; i < n; i++)
    {
        int start, end,step=1,count=0;
        cin >> start >> end;
        while (start < end)
        {
            if (end - start <= step)
            {
                count += 1;
                break;
            }
            start += step;
            end -= step;
            count += 2;
            step++;
        }
        cout << count << endl;
    }
}