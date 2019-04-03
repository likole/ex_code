#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
    double a[10];
    for (int i = 0; i < 10; i++)
    {
        cin >> a[i];
    }
    double sum = 0;
    for (int i = 0; i < 10; i++)
    {
        sum += a[i];
    }
    cout << fixed << setprecision(2) << (sum / 10) << endl;
    //cin.get();
    //cin.get();
    return 0; 
}