#include<iostream>
using namespace std;
void print(int n, char c)
{
	for (int i = 0; i < n; i++)
	{
		cout << c;
	}
}
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		print(i, '*');
		cout << endl;
	}
	for (int i = 1; i < n; i++)
	{
		print(i, ' ');
		print(n - i, '*');
		cout << endl;
	}
}