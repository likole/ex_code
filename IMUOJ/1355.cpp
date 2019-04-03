#include<iostream>
using namespace std;
int main()
{
	int n;
	long long int a, b;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a >> b;
		cout << "Case " << i + 1 << ":\n" << a << " * " << b << " = " << a*b << endl << endl;
	}
}