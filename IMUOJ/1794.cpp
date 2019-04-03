#include<iostream>
using namespace std;
int main()
{
	int n, *p, target_value, target_id = 0;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	cin >> target_value;
	for (int i = 0; i < n; i++)
	{
		if (p[i] == target_value)
		{
			target_id = i + 1;
			break;
		}
	}
	cout << target_id;
}