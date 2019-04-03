#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
    int std, real;
    cin >> std >> real;
    if (real <= std)
    {
        cout << 10 * real;
    }
    else if (real<=std*2)
    {
        cout << 20 * real;
    }
    else if (real <= std * 3)
    {
        cout << 30 * real;
    }
    else
    {
        cout << 50 * real;
    }
}