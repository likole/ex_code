#include<iostream>
using namespace std;
int ans[100], index = 1;
void multiple()
{
	int last = 0;
	for (int i = 0; i < index; i++)
	{
		ans[i] = ans[i] * 2 + last;
		last = ans[i] / 10000;
		ans[i] %= 10000;
	}
	if (last)
	{
		ans[index++] = last;
	}
}
int main()
{
	ans[0] = 1;
	int n;
	cin >> n;
	for (int i = 0; i < n+1; i++)
	{
		multiple();
	}
	ans[0] -= 2;
	cout << ans[index - 1];
	for (int i = index-1 - 1; i >= 0; i--)
	{
		printf("%04d", ans[i]);
	}
}