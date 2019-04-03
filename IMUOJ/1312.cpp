#include<iostream>
using namespace std;
int main()
{
	int k;
	cin >> k;
	for (int kase = 1; kase <= k; kase++)
	{
		int n, num,flag=1;
		cin >> num >> n;
		int *p;
		p = new int[num + 1];
		for (int i = 0; i < num+1; i++)
		{
			p[i] = 0;
		}
		for (int j = 0; j < n; j++)
		{
			int m, n;
			cin >> m >> n;
			if (p[m] == 0 && p[n] == 0)
			{
				p[m] = 1;
				p[n] = 2;
			}
			else if (p[m] == 0 && p[n] != 0)
			{
				if (p[n] == 1)p[m] = 2;
				else p[m] = 1;
			}
			else if (p[m] != 0 && p[n] == 0)
			{
				if (p[m] == 1)p[n] = 2;
				else p[n] = 1;
			}
			else
			{
				if (p[m] == p[n])
				{
					flag = 0;
					break;
				}
			}
		}
		cout << "Scenario #" << kase << ":" << endl;
		if (flag)cout << "No suspicious bugs found!" << endl;
		else cout << "Suspicious bugs found!" << endl;
		cout << endl;
	}
}