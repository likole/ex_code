#include<iostream>
#include<cmath>
using namespace std;
int reverse(int n)
{
	int ans = 0;
	while (n)
	{
		ans = ans * 10 + n % 10;
		n /= 10;
	}
	return ans;
}
int get_sum(int k, int m, int n)
{
	int tmp[10];
	for (int i = 0; i < 10; i++)
	{
		tmp[i] = 0;
	}
	int pos = 0;
	while (m || n)
	{
		tmp[pos++] = m % 10 + n % 10;
		m /= 10;
		n /= 10;
	}
	for (int i = 0; i < 9; i++)
	{
		if (tmp[i] >= k)
		{
			int t = tmp[i];
			tmp[i] = t%k;
			tmp[i + 1] += t / k;
		}
	}
	int ans=0;
	for (int i = 0; i < 8; i++)
	{
		ans += tmp[i] * pow(10, i);
	}
	return ans;
}
int main()
{
	int k, n, m, count = 0;
	cin >> k;
	cin >> n;
	m = reverse(n);
	while (m != n)
	{
		if (count == 31)break;
		n = get_sum(k, n, m);
		m = reverse(n);
		count++;
	}
	if (count != 31)
	{
		cout << "STEP=" << count << endl;
	}
	else
	{
		cout << "Impossible!" << endl;
	}

}
