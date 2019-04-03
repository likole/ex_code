#include<iostream>
using namespace std;
int cout_count = 0;
int cout_count2 = 0;
void f(int x)
{
	int flag = 1;
	for (int i = 2; i < x/2; i++)
	{
		if (x%i == 0)
		{
			flag = 0;
			break;
		}
	}
	if (flag)
	{
		cout << x << " ";
		cout_count++;
		if (cout_count % 10 == 0)cout << endl;
	}
}
int g(int x)
{
	int a = x /100;
	int b = x / 10 % 10;
	int c = x % 10;
	if (a*a*a + b*b*b + c*c*c == x)return 1;
	else return 0;
}
int main()
{
	for (int i = 301; i <= 400; i++)
	{
		cout << i << " ";
		if (i % 10 == 0)cout << endl;
	}
	for (int i = 301; i <= 400; i++)
	{
		f(i);
	}
	cout << endl;
	for (int i = 301; i <= 400; i++)
	{
		if (g(i))
		{
			cout << i << " ";
			cout_count2++;
			if (cout_count2 % 10 == 0)cout << endl;
		}
	}
}