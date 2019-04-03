#include<iostream>
using namespace std;
int main()
{
	int ans[41];
	ans[1] = 1;
	ans[2] = 2;
	for (int i = 3; i <= 40; i++)
	{
		ans[i] = ans[i - 1] + ans[i - 2];
	}
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		cout << ans[n] << endl;
	}
}