#include<iostream>
using namespace std;
int main()
{
	int n, a[50000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[n - 1 - i];
		if (i != n - 1) cout << " ";
	}
	//cin.get(); cin.get();
	return 0;
}