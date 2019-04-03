#include<iostream>
using namespace std;
int f(int);
int main()
{
	int m,n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> m;
		cout << f(m) << endl;
	}
}
int f(int x)
{
	if (x == 1 || x == 2)return 1;
	else if (x == 3) return 2;
	else return f(x - 1) + f(x - 2);
}