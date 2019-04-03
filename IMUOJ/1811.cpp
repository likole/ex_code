#include<iostream>
#include<string>
using namespace std;
int main()
{
	string present = "0123456789abcdefghijklmnopqrstuvwxyz";
	int ans[10000], index = 0;
	int a,k;
	cin >> a>>k;
	while (a > 0)
	{
		ans[index++] = a%k;
		a /= k;
	}
	for (int i = index - 1; i >= 0; i--)
	{
		cout << present[ans[i]];
	}
}