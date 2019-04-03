#include<iostream>
using namespace std;
int main()
{
	int a[20], m[20],n,index=0;
	while (cin >> n)
	{
		a[index++] = n;
	}
	//a[index]
	m[0] = 1;
	int ans = 1;
	for (int i = 1; i < index; i++)
	{
		int k = 0;
		for (int j = 0; j < i; j++)
		{
			if (a[i] <= a[j] && m[j]>k)k = m[j];
		}
		m[i] = k + 1;
		if (m[i] > ans)ans = m[i];
	}
	cout << ans;
}