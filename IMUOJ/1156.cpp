#include<iostream>
using namespace std;
int main()
{
	int people[100],n,m;
	while (cin >> n >> m)
	{
		int index = 0;
		int remain = n;
		for (int i = 0; i < n; i++)
		{
			people[i] = 1;
		}
		int num = 0;
		while (remain > 1)
		{
			if (people[index] == 1)
			{
				num++;
				if (num == m)
				{
					people[index] = 0;
					remain--;
					num = 0;
				}
			}
			if (index == n - 1) index = 0;
			else index++;
		}
		for (int i = 0; i < n; i++)
		{
			if (people[i] == 1) cout << i + 1 << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}