#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int n_c = n;
	int present_point = -1;
	int count[10];
	for (int i = 0; i < 10; i++)
	{
		count[i] = 0;
	}
	while (n_c)
	{
		int present = n_c % 10;
		n_c /= 10;
		present_point++;
		for (int i = 0; i <= 9; i++)
		{
			if (i < present)
			{
				if (i == 0)
				{
					count[i] += n_c*pow(10, present_point);
					continue;
				}
				count[i] += (n_c + 1)*pow(10, present_point);
			}
			else if (i>present)
			{
				count[i] += (n_c)*pow(10, present_point);
			}
			else
			{
				if (i == 0)
				{
					count[i] = count[i] + (n_c-1)*pow(10, present_point) + (n % (int)pow(10, present_point)) + 1;
					continue;
				}
				count[i] = count[i] + (n_c)*pow(10, present_point) + (n % (int)pow(10, present_point)) + 1;
			}
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << count[i] << endl;
	}
}