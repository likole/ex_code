#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
    double sum = 0, a = 1;
    for (int i = 1; i <= 30; i++)
    {
        a *= i;
        sum += a;
    }
    cout << scientific << setprecision(2) << sum << endl;
}