#include<iostream>
using namespace std;
int main()
{
	int ans[21];
	ans[1] = 1;
	ans[2] = 2;
	ans[3] = 4;
	for (int i = 4; i < 21; i++)
	{
		ans[i] = ans[i - 1] + ans[i - 2] + ans[i - 3];
	}
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int m;
		cin >> m;
		cout << ans[m] << endl;
	}
}