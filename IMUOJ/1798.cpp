#include<iostream> 
#include<string>
using namespace std;
int main()
{
	int n;
	string str;
	cin >> n;
	for (int m = 0; m < n; m++)
	{
		int *a;
		cin >> str;
		int max = 0;
		a = new int[str.length()];
		a[0] = 1;
		for (int i = 1; i < str.length(); i++)
		{
			int k = 0;
			for (int j = 0; j < i; j++)
			{
				if (str[i] > str[j] && k < a[j])k = a[j];
			}
			a[i] = k + 1;
			if (a[i] > max) max = a[i];
		}
		cout << max << endl;
		delete a;
	}
}
