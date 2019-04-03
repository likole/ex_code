#include<iostream>
using namespace std;
float fact(int);
int main()
{
	int m, n;
	cin >> m >> n;
	cout << fact(m) / (fact(n)*fact(m - n));
	//cin.get();
	//cin.get();
	return 0;
}
float fact(int a)
{
	int x = 1;
	for (int i = 1; i <= a; i++)
	{
		x *= i;
	}
	return x;
}