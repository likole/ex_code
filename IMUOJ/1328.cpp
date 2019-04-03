#include<iostream>
using namespace std;
int main()
{
	int m;
	cin >> m;
	for (int j = 0; j < m; j++)
	{
		int n, num[1000];
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		int ans = 0;
		for (int i = 0; i < n; i++)
		{
			ans += num[i];
		}
		cout << ans << endl<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}