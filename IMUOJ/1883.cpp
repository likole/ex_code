#include<iostream>
using namespace std;
void print(int n, char c = ' ')
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
	print(n - 1);
	print(n, '*');
	cout << endl;
	for (int i = 2; i <= n; i++)
	{
		print(n - i);
		cout << "*";
		print(2 * i + n - 4);
		cout << "*" << endl;
	}
	for (int i = n-1; i >=2; i--)
	{
		print(n - i);
		cout << "*";
		print(2 * i + n - 4);
		cout << "*" << endl;
	}
	print(n - 1);
	print(n, '*');
	cout << endl;
}