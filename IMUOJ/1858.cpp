#include<iostream>
using namespace std;
int main()
{
	int a[100],index=0,n;
	while (cin >> n) 
	{
		for (int i = 0; i < n; i++)
		{
			int t;
			cin >> t;
			int exist = 0;
			for (int j = 0; j < index; j++)
			{
				if (a[j] == t) exist = 1;
			}
			if (!exist)
			{
				a[index++] = t;
			}
		}
		cout << index << endl;
	}
}