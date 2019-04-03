#include<iostream>
using namespace std;
int main()
{
	int m;
	cin >> m;
	for (int i = 0; i < m; i++)
	{
		int n,t;
		cin >> n;
		int sum = 0;
		for (int j = 0; j < n; j++)
		{
			cin >> t;
			sum += t;
		}
		cout << sum - n + 1 << endl;
	}
}