#include<iostream>
using namespace std;
int is_same_ans(int m,int n,int mask)
{
	int a[8],b[8],c[8],index=0;
	for (int i = 0; i < 8; i++)
	{
		a[i] = 0;
		b[i] = 0;
		c[i] = 0;
	}
	while (m > 0)
	{
		a[index++] = m % 2;
		m /= 2;
	}
	index = 0;
	while (n > 0)
	{
		b[index++] = n % 2;
		n /= 2;
	}
	index = 0;
	while (mask > 0)
	{
		c[index++] = mask % 2;
		mask /= 2;
	}
	int flag = 1;
	for (int i = 0; i < 8; i++)
	{
		if ((a[i]&c[i]) != (b[i]&c[i])) flag = 0;
	}
	return flag;
}
int main()
{
	int self[4], mask[4], other[4];
	char t;
	cin >> self[0] >> t >> self[1] >> t >> self[2] >> t >> self[3];
	cin >> mask[0] >> t >> mask[1] >> t >> mask[2] >> t >> mask[3];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int flag = 0;
		cin >> other[0] >> t >> other[1] >> t >> other[2] >> t >> other[3];
		for (int i = 0; i < 4; i++)
		{
			if (is_same_ans(self[i], other[i], mask[i]))flag++;
		}
		if (flag==4)cout << "INNER\n";
		else cout << "OUTER\n";
	}
}