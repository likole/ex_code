#include<iostream>
#include<iomanip>
using namespace std;
float fib(int);
int main()
{
	int n;
	float sum=0;
	cin >> n;
	for (int i = 1; i <=n; i++)
	{
		
		sum +=(fib(i + 1) / fib(i));
	}
	cout << fixed << setprecision(2) << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}

float fib(int x)
{
	if (x == 1) return 1;
	else if (x == 2) return 2;
	else return (fib(x - 1) + fib(x - 2));
}