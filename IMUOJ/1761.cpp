#include<iostream>
using namespace std;
int main()
{
	int n, a[1000], sum = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		sum += a[i];
	}
	cout << sum << endl;
	//cin.get(); cin.get();
	return 0;
}